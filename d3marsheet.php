<!DOCTYPE html>
<html>
  <head>
    <title>Result</title>
  </head>
<body>
  <div>
    <center>
      <fieldset>
        <legend>STUDENT RESULTS </legend>
        <form action="d3resultprocess.php" method="post">
            <table>
              <tr>
                  <td width="70px"> Serial. No. </td>
                <td width="100px"> Subject Name </td>  
                <td width="150px"> Marks </td>
              </tr>  
              <tr>
                  <td> 1 </td>
                  <td> <input type="text" name="s1" placeholder="Subject 1" required> </td>  
                  <td> <input type="Number" name="m1" required> </td>
              </tr>  
              <tr>
                  <td> 2 </td> 
                  <td> <input type="text" name="s2" placeholder="Subject 2" required> </td>  
                  <td> <input type="Number" name="m2" required> </td>
              </tr>  
              <tr>
                  <td> 3 </td> 
                  <td> <input type="text" name="s3" placeholder="Subject 3" required> </td>  
                  <td> <input type="Number" name="m3" required> </td>
              </tr>  
              <tr>
                  <td> 4 </td> 
                  <td> <input type="text" name="s4" placeholder="Subject 4" required> </td>  
                  <td> <input type="Number" name="m4" required> </td>
              </tr>  
              <tr>
                  <td> 5 </td> 
                  <td> <input type="text" name="s5" placeholder="Subject 5" required> </td>  
                  <td> <input type="Number" name="m5" required> </td>
              </tr> 
              <tr>
                <td></td>
                <td><input type="submit" /></td>
                <td><input type="reset" /></td>
              </tr> 
            </table>
          </form>
        </fieldset>
      </center>
    </div>
  </body>
</html>