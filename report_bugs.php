<!DOCTYPE html>
<html>
  <head>
    <title>Report Bugs</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>Report a Bug</h3>
    <p>We apologise for the inconvenience. Please describe the issue you are facing and we will get back to you with a fix.</p>
    <form method="POST" action="bugs_submit.php" id='bugs_form' enctype="multipart/form-data">
      <table cellpadding="3">
        <tr>
          <td><label for="email">Email ID:</label></td>
          <td><input id="email" type="email" name="email" required="true"></td>
        </tr>
       <tr>
          <td><label for="email">Name:</label></td>
          <td><input id="name" type="text" name="name" required="true"></td>
        </tr>
        <tr>
          <td valign="top"><label for="bug-info">Describe the issue:</label></td>
          <td><textarea id="bug_info" rows="5" cols="32" form='bugs_form' name="bug_info" required="true"></textarea></td>
        </tr>
        <tr>
          <td><label for="files">Add Screenshot :</label></td>
          <td><input id="bug_ss" type="file" name="bug_ss"></td>
        </tr>
        <tr colspan="2">
          <td><input type="submit" value="SUBMIT REPORT" name="bugs_submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>


