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


const createTaskRow = data => $("<tr></tr>")
    .append($("<td></td>").attr("class", "verticalAlign Number"))
    .append($("<td></td>").attr("class", "verticalAlign Task"))
    .append($("<td></td>").attr("class", "verticalAlign Predecessor"))
    .append($("<td></td>").attr("class", "verticalAlign Who"))
    .append($("<td></td>").attr("class", "verticalAlign Moscow"))
    .append($("<td></td>").attr("class", "verticalAlign Plan"))
    .append($("<td></td>").attr("class", "verticalAlign Do"))
    .append($("<td></td>").attr("class", "verticalAlign Check"))
    .append($("<td></td>").attr("class", "verticalAlign Number"))
    .append($("<td></td>").attr("class", "verticalAlign Number"))
    .append($("<td></td>").attr("class", "verticalAlign Number"));

$(document).ready(() =>
{
  loadProjects();

  $("#btnNewProject").click(newProject);

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

function newProject()
{
  var name = prompt("Enter a name for the project");
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
       }
    });
    loadProjects();
  }
}

function loadProjects()
{
  $.ajax({
    type: 'GET',
    url: 'loadProjects.php',

    success: function(data)
    {
      var time;
      $("#projects").html("");

      $.each(data, function (key, data)
      {
        time = data.added.split(' ');

        $("#projects").append(""+
        "<tr>" +
          "<td>" + data.id + "</td>" +
          "<td>" + data.name + "</td>" +
          "<td>" + time[0] + "</td>" +
          "<td><input id='projectView" + data.id + "' class='btn btn-info' type='button' value='View' /></td>" +
          "<td><input id='projectRem" + data.id + "' class='btn btn-danger' type='button' value='Remove' /></td>" +
        "</tr>");
      });
    }
  });
}
