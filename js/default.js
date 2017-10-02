const  getprefixedTime = time => time < 10 ? `0${time}` : time;
 
 const getTimestring = seconds => { 
   let secondsLeft = seconds; 
   let hours = Math.floor(secondsLeft / 3600); 
   secondsLeft -= hours * 3600; 
   let minutes = Math.floor(secondsLeft / 60);  
   secondsLeft -= minutes * 60; 
   return `${getprefixedTime(hours)}:${getprefixedTime(minutes)}:${getprefixedTime(secondsLeft)}`; 
  };

const getSeconds = timeString => { 
  const timeSplit = timeString.split(":"); 
  return parseFloat(timeSplit[0]) * 3600 + parseFloat(timeSplit[1]) * 60 + parseFloat(timeSplit[2]) 
};  


const updateTimer = () => {

const totalPlannedTime = getTimestring(  [...$("#tasks .Plan input")].reduce((start, next) => start + getSeconds( $(next).val()  ), 0) );

const totalDoneTime = getTimestring(  [...$("#tasks .Do input")].reduce((start, next) => start + getSeconds( $(next).val()  ), 0) );


$("#timePlanned").text(totalPlannedTime);
$("#timeDone").text(totalDoneTime);


};




const createProjectRow = (rowIndex, rowData) =>  $("<tr></tr>").data("dbId", rowData.id)
    .append($("<td></td>").append(rowIndex))
    .append($("<td></td>").append(rowData.name))
    .append($("<td></td>").append(rowData.added.split(' ')[0]))
    .append($("<td></td>").append($("<input />")
      .attr({
        "class" : "btn btn-info btnProjectView", 
        "type" : "button",
        "value" : "View"
      })
    ))
    .append($("<td></td>").append($("<input />")
      .attr({
        "class" : "btn btn-danger btnProjectRemove", 
        "type" : "button",
        "value" : "Remove"
      })
    ));

const newProject = () => {
  const name = prompt("Enter a name for the project");
  if(name != '' && name != null)//Clicking OK when string is '' || Clicking cancel
  {
    //Before the ajax call we need to be sure the entered name doesn't exist yet,
    //Protect the input from sql injection
    //and show a dialog (or show a div) saying the project has been added OR not
    $.ajax(
    {
       type: 'POST',
       url:  'newProject.php',
       data:
       {
         projectnaam: name
       },
       success: loadProjects
    });
  }
}

const  loadProjects = () => $.ajax({
  type: 'GET',
  url: 'loadProjects.php',
  success: data => {
    $("#projects tbody").html("");
    $.each(data, (projectRowIndex, projectRowData) => $("#projects tbody").append(createProjectRow(projectRowIndex + 1, projectRowData)));
  }
});


const removeProject = e =>  $.ajax({
    type: 'POST',
    url:  'removeProject.php',
    data:
    {
      projectId: $(e.target).closest("tr").data("dbId")
    },
    success : loadProjects
});


const createTaskRow = (users, rowId, rowData) => $("<tr></tr>").data("dbId", rowData.id) //not done
      .append($("<td></td>").attr("class", "verticalAlign Number").append(rowId))
      .append($("<td></td>").attr("class", "verticalAlign Task").append($("<input />")
        .attr({
          "class" : "form-control", 
          "type" : "text",
        })
        .val(rowData.name)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Predecessor").append($("<input />")
        .attr({
          "class" : "form-control", 
          "type" : "number",
        })
        .val(rowData.predecessor)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Who").append($("<select></select>")
        .attr("class", "fsSelect")
        .data("width", 100)
        .append(users.map(x => `<option>${x}</option>`).reduce((prev, next) => prev + next))
        .val(rowData.username)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Moscow").append($("<select></select>")
        .attr("class", "fsSelect")
        .data("width", 100)
        .append(
          $("<option></option>").text("must").attr("value", "must"),
          $("<option></option>").text("could").attr("value", "could"),
          $("<option></option>").text("should").attr("value", "should"),
          $("<option></option>").text("won't").attr("value", "won't")

        )
        .val(rowData.moscow)
        
      ))
      .append($("<td></td>").attr("class", "verticalAlign Plan").append($("<input />")
        .attr({
          "class" : "form-control", 
          "type" : "text",
        })
        .val(rowData.plan)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Do").append($("<input />")
        .attr({
          "class" : "form-control", 
          "type" : "text",
        })
        .val(rowData.do)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Check").append($("<textarea></textarea>")
        .attr("class" , "form-control")
        .val(rowData.check)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Act").append($("<textarea></textarea>")
        .attr("class" , "form-control")
        .val(rowData.act)
      ))
      .append($("<td></td>").attr("class", "verticalAlign Start").append($("<input />")
        .attr({
          "class" : "btn btn-success", 
          "type" : "button",
          "value" : "Start"
        })
      ))
      .append($("<td></td>").attr("class", "verticalAlign Remove").append($("<input />")
        .attr({
          "class" : "btn btn-warning", 
          "type" : "button",
          "value" : "Remove"
        })
      ));

const newTask = () => {
  const name = prompt("Enter a name for the project");
  if(name != '' && name != null)//Clicking OK when string is '' || Clicking cancel
  {
    //Before the ajax call we need to be sure the entered name doesn't exist yet,
    //Protect the input from sql injection
    //and show a dialog (or show a div) saying the project has been added OR not
    $.ajax(
    {
       type: 'POST',
       url:  'newTask.php',
       data:
       {
          projectId: $(e.target).closest("tr").data("dbId"),
          taskName: name
       },
       success: loadProjects
    });
  }
}
const loadTasks = e => $.ajax({
    type : "POST",
    url : "loadTasks.php",
    data : 
    {
        projectId: $(e.target).closest("tr").data("dbId")
    },
    success: data =>
    {
        $("#lblProjectTitle").html("");
        $("#lblProjectTitle").append("Tablename");
        $("#tasks").show();
        $("#tasks tbody").html("");
        $("#projects").hide();
        $("#btnNewProject").css("display", "none");
        $("#btnShowProjects").css("display", "block");
        $("#lblProjectTitle").css("display", "block")
        console.log(data.tasks);

        const createTaskRowBound = createTaskRow.bind(null, data.users);

        $.each(data.tasks, (taskRowIndex, taskRowData) => $("#tasks tbody").append(createTaskRowBound(taskRowIndex + 1, taskRowData)));

        $(".fsSelect").select();
        updateTimer();
    },
    error: data =>
    {
        console.log("Error in loading Tasks: " + data);
    }
});

const removeTask = e =>  console.error("unimplemented"); 



$(document).ready(() => {
    
    $("#lblProjectTitle").css("display", "none");
    $("#btnShowProjects").css("display", "none");
    
  loadProjects();
  $("#btnNewProject").click(newProject);
    $('#projects').on("click", ".btnProjectRemove", e =>
    {
        e.preventDefault();
        if (window.confirm("Are you sure you want to remove this item?"))
            removeProject(e);
    });
    
    $('#projects').on("click", ".btnProjectView", loadTasks);
    $('#btnShowProjects').click(e =>
    {
        $("#tasks").hide();
        $("#projects tbody").html("");
        $("#projects").show();
        $("#btnNewProject").css("display", "block");
        $("#btnShowProjects").css("display", "none");
        $("#lblProjectTitle").css("display", "none")
        loadProjects();
    });


  $('#login-trigger').click(e =>
  {
      $(this).next('#login-content').slideToggle();
      $(this).toggleClass('active');
      if ($(this).hasClass('active')){
          $(this).find('span').html('&#x25B2;');
      }else{
          $(this).find('span').html('&#x25BC;');
      }
  });
});

/*
                            <tr>
                                <td class="VerticalALign Number">1</td>
                                <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Predecessor"><input class="form-control" type="number" /></td>
                                <td class="VerticalALign Who">
                                     <select class="fsSelect" data-width="100px">
                                     </select>
                                </td>
                                <td class="VerticalALign MoSCoW">
                                    <select class="fsSelect" data-width="100px">
                                        <option value="Must">Must</option>
                                        <option value="Could">Could</option>
                                        <option value="Should">Should</option>
                                        <option value="Won't">Won't</option>
                                    </select>
                                </td>
                                <td class="VerticalALign Plan"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Do"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Check"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Act"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Start"><input class="btn btn-success" type="button" value="Start" /></td>
                                <td class="VerticalALign Remove"><input class="btn btn-warning" type="button" value="Remove"/></td>
                            </tr>
*/