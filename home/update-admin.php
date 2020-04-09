<?php
  include('session.php');
?>
<?php
	include('config.php');

	$qry = "select * from users order by id asc";
	$result = $conn->query($qry);
?>
<br>
<meta charset="utf-8">

<style type="text/css">
  
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:400px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
td a{
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}
td a:hover {
  background-color: rgba(255,255,255,0.3);
}
.btn, .btn-normal, .btn-shadow, a {
  border: none;
  border-radius: 4px;
  color: #fff;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: .165em;
  text-align: center;
  background-color: #607e97;
  padding: 1.2em 4em;
  text-transform: uppercase;
  transition: all 0.5s ease-in;
}
.btn:hover, .btn-normal:hover, .btn-shadow:hover, .btn:focus, .btn-normal:focus, .btn-shadow:focus {
  background-color: #384a59;
}

.btn-shadow ,a {
  box-shadow: 12px 15px 20px rgba(0, 0, 0, 0.1);
}
.btn-shadow:hover, .btn-shadow:focus {
  box-shadow: 2px 4px 8px 0 rgba(0, 0, 0, 0.1);
}
.teacher-b {
  position: relative;
  top: 0px;
  left:300px;
}
</style>

<body>
<form>
	
</form>

<h1>Admin хяналтын хэсэг</h1>
<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>id</th>
          <th>Админ нэр</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
           </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
   <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
	<?php while($row = $result->fetch_assoc()){?>
		<tr>
		<td><?php echo $row['id'];?></td>
			<td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
			
           
			<td><?php echo $row['id'];?></td>
			<td><a href="burtgel.php?id=<?php echo $row['id'];?>">Засах</a></td>
            <td><a href="process.php?action=userdel&id=<?php echo $row['id'];?>">Устгах</a></td>
		</tr>
	<?php }?>
<br>
</tbody>
    </table>
  </div>
  
        <div class="teacher-b">
<button class="btn-normal"><a href="burtgel.php">Админ нэмэх</a></button>

<button class="btn-shadow"> <a href="/home/welcome.php">Буцах</a></button>
<br>
</div>

</body>