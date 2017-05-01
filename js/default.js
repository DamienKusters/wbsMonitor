
const createProjectRow = (rowIndex, rowData) =>  $("<tr></tr>").data("dbId", rowData.id)
    .append($("<td></td>").append(rowIndex))
    .append($("<td></td>").append(rowData.name))
    .append($("<td></td>").append(rowData.added.split(' ')))
    .append($("<td></td>").append($("<input />")
      .attr({
        "class" : "btn btn-info btnProjectView", 
        "type" : "button",
        "value" : "view"
      })
    ))
    .append($("<td></td>").append($("<input />")
      .attr({
        "class" : "btn btn-danger btnProjectRemove", 
        "type" : "button",
        "value" : "remove"
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
    $("#projects").html("");
    $.each(data, (projectRowIndex, projectRowData) => $("#projects").append(createProjectRow(projectRowIndex + 1, projectRowData)));
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


/*<tr>
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
</tr>*/


const createTaskRow = (rowId, rowData) => $("<tr></tr>").data("dbId", rowData.id) //not done
    .append($("<td></td>").attr("class", "verticalAlign Number").append(rowId))
    .append($("<td></td>").attr("class", "verticalAlign Task"))
    .append($("<td></td>").attr("class", "verticalAlign Predecessor"))
    .append($("<td></td>").attr("class", "verticalAlign Who"))
    .append($("<td></td>").attr("class", "verticalAlign Moscow"))
    .append($("<td></td>").attr("class", "verticalAlign Plan"))
    .append($("<td></td>").attr("class", "verticalAlign Do"))
    .append($("<td></td>").attr("class", "verticalAlign Check"))
    .append($("<td></td>").attr("class", "verticalAlign Act"))
    .append($("<td></td>").attr("class", "verticalAlign Start"))
    .append($("<td></td>").attr("class", "verticalAlign Remove"));

const newTask = () => console.error("unimplemented");

const  loadTasks = () => console.error("unimplemented");

const removeTask = e =>  console.error("unimplemented");





$(document).ready(() => {

  loadProjects();
  $("#btnNewProject").click(newProject);
  $('#projects').on("click", ".btnProjectRemove", removeProject);

  $(".fsSelect").select();
  $('#login-trigger').click(function()
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