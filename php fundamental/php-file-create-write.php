<?php include 'header.php';?>
        <section class="maincontent">
        <h1>PHP File Create Write </h1> 
        <h1>File open/Read/Close</h1>
        <!-- PHP File Handling is a way to store and retrieve data from a file. It is a way to store and retrieve data from a file.   -->
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>
        </span>

            <?php
            /// for create a new file.(read write update delete)
            // fopen(filename,mode)
            // mode = r,w,a,x,c
            // r = read
            // w = write
            // a = append
            // x = create
            // c = create and write
            // fclose(file)
            // fwrite(file,data)
            // fread(file,length)
            // fgets(file)
            // fgetc(file)
            // fseek(file,offset)
            // ftell(file)
            // feof(file)
            // filesize(file)
            // file_exists(file)
            // file_get_contents(file)
            // file_put_contents(file,data)
            // file_get_contents(file)
            // file_put_contents(file,data)
            // file_get_contents(file)
            // file_put_contents(file,data)
            // file_get_contents(file)
            // file_put_contents(file,data)
            
            
                $createFile = fopen("new-created-file.txt","w") or die("file not created!!");
                $writeFile  = "Dilder Learn PHP Programming Language\n";
                fwrite($createFile,$writeFile);

                $writeFile2 = "My main target is to achieve my Goal";
                fwrite($createFile,$writeFile2);
                fclose($createFile);
                
                $ourFile = fopen("file-handling.txt","r") or die("file not found!!");
                echo fgets($ourFile); 
            ?>
         

        </section>
        
<?php include 'footer.php';?>