<html>
  <head>
    <title>Support Us</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>Support Us</h3>
    <p>We are making a collection of best resources for various technical topics.<br>
       You can help us by contributing links/references to resources(books,blogs,videos,etc) for any topic you found useful.</p>
    <form method="POST" id="res_submit_form" action="submit_resources.php">
      <table cellpadding="5">
        <tr>
          <td><label>Topic</label></td>
          <td><input type="text" name="res_topic"></td>       
        </tr>
        <tr>
          <td><label>Language</label></td>
          <td>
            <select name="res_language">
              <option value="" disabled>Select Option</option>
              <option value="c" >C</option>
              <option value="java">Java</option>
              <option value="html">HTML</option>
              <option value="css">CSS</option>
              <option value="php">PHP</option>
              <option value="javascript">JavaScript</option>
              <option value="python">Python</option>
              <option value="c++">C++</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label>Resource Type</label></td>
          <td>
            <select name="res_type">
              <option value="" disabled>Select Option</option>
              <option value="website" >Blog / Website</option>
              <option value="video">Video</option>
              <option value="book">Book</option>
              <option value="other">Other</option>
            </select>
          </td>
        </tr>
        <tr>
          <td valign="top"><label>Links/References</label></td>
          <td><textarea form="res_submit_form" name="res_link" rows="10" cols="32"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit_resources" value="SUBMIT"></td>
        </tr>
      </table>
    </form>
    
    
  </body>
</html>
