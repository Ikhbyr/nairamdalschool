<?php
  include('session.php');
?>
<?php
	include('config.php');

	$qry = "select photo,title,body,title1,body1,id from medee order by id desc";
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
</style>

<body>
<form>
	<a href="upload-medee.php"><input type="button" value="Мэдээ нэмэх" ></input></a>
	<a href="/home/welcome.php"><input type="button" value="Буцах"></input></a>
</form>

<h1>Мэдээний хяналтын хэсэг</h1>
<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Зураг</th>
          <th>Гарчиг</th>
          <th>ID</th>
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
		<td><img src="/home/medee/image/<?php echo $row['photo'];?>" alt="" style="width:50px;height:50px"></td>
			<td><?php echo $row['title'];?></td>
            
			
           
			<td><?php echo $row['id'];?></td>
			<td><a href="upload-medee.php?id=<?php echo $row['id'];?>">Засах</a></td>
            <td><a href="process.php?action=medeedel&id=<?php echo $row['id'];?>">Устгах</a></td>
		</tr>
	<?php }?>
<br>
</tbody>
    </table>
  </div>

</body>