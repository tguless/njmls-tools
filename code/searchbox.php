<?PHP
/*

<style type="text/css">
<!--
.boldred {
	color: #fe0000;
	font-weight: bold;
}
-->
</style>

<form name="form1" method="post" action="">
<table width="160" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="fe0000">
    <td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
    <td width="100%"><img src="images/spacer.gif" width="1" height="1"></td>
    <td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td bgcolor="fe0000"><img src="images/spacer.gif" width="1" height="1"></td>
    <td bgcolor="#FFFFFF">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/spacer.gif" width="1" height="10"></td>
        <td><img src="images/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td width="8">&nbsp;</td>
        <td width="176"><span class="boldred">Modify Search</span> </td>
      </tr>
    </table>
      <img src="images/spacer.gif" width="1" height="10">
      <table width="100%" border="0" cellpadding="0" cellspacing="2">
      <tr bgcolor="#FFFFFF">
        <td width="13">&nbsp;</td>
        <td width="56"><strong>Price</strong></td>
        <td width="116"><?PHP include "minprice.php";?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>to
        </td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><?PHP include maxrpice.php;?></td>
      </tr>
      <!--
	  <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>Beds</strong></td>
        <td><select name="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>Baths</strong></td>
        <td><select name="select">
        </select></td>
      </tr>
      -->
      <!--
	  <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>Country</strong></td>
        <td><select name="select">
          <option>United States</option>
        </select></td>
      </tr>
	  -->
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>City</strong></td>
        <td><input name="text" type="text" size=10></td>
      </tr>
      <!--
	  <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>State</strong></td>
        <td><select name="select">
          <option value="NJ">NJ</option>
        </select></td>
      </tr>
      -->
      <!--
	  <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>Zip</strong></td>
        <td><input type="text" name="textfield"></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>Radius</strong></td>
        <td><select name="select">
        </select></td>
      </tr>
      -->
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><strong>MLS#</strong></td>
        <td><input type="text" name="textfield" size=10></td>
      </tr>
    </table>
      <div align="center"><br>
          <input type="submit" name="Submit" value="Search">
          <br>
          <br>
      </div>
      <!-- --></td>
    <td bgcolor="fe0000"><img src="images/spacer.gif" width="1" height="1"></td>
  </tr>
  <tr bgcolor="fe0000">
    <td bgcolor="fe0000"><img src="images/spacer.gif" width="1" height="1"></td>
    <td><img src="images/spacer.gif" width="1" height="1"></td>
    <td><img src="images/spacer.gif" width="1" height="1"></td>
  </tr>
</table>
</form>
*/
?>