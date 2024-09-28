<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<div class="news">
<div class="clearfix"></div>
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"> Downloads</h3></div><center>
<p>In order to play, you need the Tibia Client:</p>

<table class="TableContent" width="100%"><center>
<td style="text-align:center"><img src="https://logowik.com/content/uploads/images/windows-116906.jpg" width="20"></td><td style="text-align:center"><img src="https://w7.pngwing.com/pngs/351/692/png-transparent-linux-logo-linux-distribution-tux-gnu-linux-bird-linux-kernel-thumbnail.png" width="20"></td><td style="text-align:center"><img src="https://ideare.pl/main/uploads/2015/01/Android-logo.png" width="25"></td>
<tr><td style="text-align:center">Clean Mythoria client based on OTClientV8.</td><td style="text-align:center">For macOS version you need to install xQuartz first.</td><td style="text-align:center">Based on clean OTClientV8 .apk</td>
<tr><td><center><a href="https://mega.nz/file/OBNXFDrK#yJryQfNvy2yA7l5XPSWVGQeWOjTS8p_Yc239Uf0lFqM" class="btn btn-primary btn-shiny btn-block">Windows Client</a></center>
</td><td><center><a href="https://mega.nz/folder/TZEDULgI#xVMvp8Ak5w7zki_tsZEFbw" class="btn btn-primary btn-shiny btn-block">Linux / macOS Client</a></center>
</td><td><center><a href="https://mega.nz/file/6N9lGS4R#OYEai9T59eQqsI9e3l6BlnQWknrJV-9RGTjc6k4e0BU" class="btn btn-primary btn-shiny btn-block">Android Client</a></center></table>



	<div class="news">
		<div class="clearfix"></div>
		<div class="panel panel-default">
			<div class="panel-heading">
			<h4>How to connect and play:</h4>

		<a href="<?php echo $config['client_download']; ?>">Download</a> and unpack the Mythoria client if you havent already.
	
		<a href="https://github.com/jo3bingham/tibia-ip-changer/releases/latest">Download</a> and run the IP changer.
	
		In the IP changer, change Client Path to the tibia.exe file where you installed the client.</strong>
	
		In the IP changer, write this in the IP field: <?php echo $_SERVER['SERVER_NAME']; ?>
	
		Now you can successfully login on the tibia client and play clicking on <strong>Apply</strong>.<br>
		If you do not have an account to login with, you need to register an account <a href="register.php">HERE</a>.
</div></div></div>
</center>
<center><h4> Client Downloads </h4></center>
<?php
                                                                                    $download_links = array(
                                                                                      "client1" => "Direct UR",
                                                                                      "client2" => "Direct URL",
																					  "client3" => "Direct URL",
                                                                                    );

                                                                                    $download_url = false;
                                                                                    if (isset($_GET['client']) && isset($download_links[$_GET['client']])) {
                                                                                      $download_url = $download_links[$_GET['client']];
                                                                                      header("Location: {$download_url}");
                                                                                      die();
                                                                                    }
                                                                                    ?>


																					<center><form action="" method="GET" target="_blank">
                                                                                      <label for="client"></label>
                                                                                      <select id="client" name="client" style="width:200px;font-family:Trebuchet ms;">
                                                                                       <option value="client1">Client 1 Windows</option>
                                                                                        <option value="client2">Client 2 Linux</option>
																						<option value="client3">Client 3 Other</option>
                                                                                      </select>
                                                                                      <br><br>
                                                                                     <center> <input type="submit" class="btn btn-primary btn-shiny btn-block" value="Submit" style="width:200px"></center>
                                                                                    </form></center>
																				</div></div>
<?php
include 'layout/overall/footer.php'; ?>
