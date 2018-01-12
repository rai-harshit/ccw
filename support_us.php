<html>
  <head>
    <title>Support Us</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>Support Us</h3>
    <p>We are making a collection of best resources for various technical topics.<br>
       You can help us by contributing links/references to resources(books,blogs,videos,etc) for any topic you found useful.</p>
    <form method="POST" action="submit_resource.php">
      <table cellpadding="5">
        <tr>
          <td><label>Topic:</label></td>
          <td><input type="text" name="topic"></td>       
        </tr>
        <tr>
          <td><label>Resource Type:</label></td>
          <td>
            <select>
              <option value="" disabled>Select Option</option>
              <option value="website">Blog / Website</option>
              <option value="video">Video</option>
              <option value="book">Book</option>
              <option value="other">Other</option>
            </select>
          </td>
        </tr>
        <tr>
          <td valign="top"><label>Links/References:</label></td>
          <td><textarea rows="10" cols="32"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="SUBMIT"></td>
        </tr>
      </table>
    </form>
    
    
  </body>
</html>
