<?php include('db_fns.php');

// We're putting all our files in a directory called images.
$uploaddir = 'C:\xampp\htdocs\q-afya\upload/';

// The posted data, for reference
$file = $_POST['value'];
$name = $_POST['name'];
$stamp = $_POST['stamp'];

// Get the mime
$getMime = explode('.', $name);
$mime = end($getMime);

// Separate out the data
$data = explode(',', $file);

// Encode it correctly
$encodedData = str_replace(' ','+',$data[1]);
$decodedData = base64_decode($encodedData);

// You can use the name given, or create a random name.
// We will create a random name!

$randomName = $name;


if(file_put_contents($uploaddir.$randomName, $decodedData)) {
	echo $randomName.":uploaded successfully";
	$resulta = mysql_query("insert into empdocs values('0','".$stamp."','','','".$name."','".date('d/m/Y')."','".date('Ymd')."','1')");	
}
else {
	// Show an error message should something go wrong.
	echo "Something went wrong. Check that the file isn't corrupted";
}


?>
