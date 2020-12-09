  <h3>Admin Signup</h3>
  <p>This is an assignment of PGD-20 of Course PGD-107</p>

<form action="action.php" method="POST">
  <table class="table table-borderless" style="width: 1200px">
    <thead>
      <tr>
        <th style="width: 300px">DESCRIPTION</th>
        <th  style="width: 100px"></th>
        <th  style="width: 800px">INPUT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Admin Email</td>
        <td>:</td>
        <td>
          <input type="text" name="email" id="email" placeholder="email">
        </td>
      </tr>
       <tr>
        <td>Admin Password</td>
        <td>:</td>
        <td>
          <input type="password" name="password" id="password" placeholder="password">
        </td>
      </tr>
       <tr>
        <td>Admin Name</td>
        <td>:</td>
        <td>
          <input type="text" name="name" id="name" placeholder="name">
        </td>
      </tr>
       <tr>
        <td>Admin Designation</td>
        <td>:</td>
        <td>
          <input type="text" name="designation" id="designation" placeholder="designation">
        </td>      
      </tr>  
       
       <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" name="admin_signup" id="admin_signup" value="Signup">
        </td>
      </tr>
    </tbody>
  </table>
  
</form>
