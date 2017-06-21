
<div style="margin-top:30px;" >

 
  <form action="<?php echo $editFormAction; ?>" method="POST"  name="form1" acceptcharset="UTF-8">
    <table  border="0" class="table">
   
      <tr>
        <td style="text-align: right">First Name</td>
        <td>
        <input type="text" name="fname" id="fname" required  class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Last Name</td>
        <td><input type="text" name="lname" id="lname" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Father</td>
        <td><input type="text" name="father" id="father"  required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Gender</td>
        <td><label for="gender"></label>
          <select name="gender" id="gender" class="form-control">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">DOB</td>
        <td><label for="DOB"></label>
        <input type="date" name="DOB" id="DOB" required class="form-control" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Email</td>
        <td><input type="email" name="email" id="email" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Phone</td>
        <td><input type="text" name="phone" id="phone" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">UserName</td>
        <td><input type="text" name="username" id="username" required class="form-control"></td>
        <td><font color="red"><?php echo   $userexits; ?></font></td>
      </tr>
      <tr>
        <td style="text-align: right">Password</td>
        <td><input type="password" name="password" id="password" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Address</td>
        <td><textarea name="address" id="address" required class="form-control"> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td><label for="lang"></label></td>
        <td>&nbsp;</td>
      </tr>
     
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td><input  class="btn btn-default" type="submit" name="Save" id="Save" value="Save"></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
</div>
