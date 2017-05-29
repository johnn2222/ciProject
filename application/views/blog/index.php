<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Blog Site</title>
        <?php echo link_tag('assets/css/bootstrap.min.css');?>
	
</head>
<body>

    <div id="container" class="container">
	<h1>Welcome to Blog !</h1>

	<div>
            <span style="width:100%;float:left;margin:0;background:#ccc;color:green;">
                <?php if($this->session->flashdata('succ_msg')):echo $this->session->flashdata("succ_msg"); endif;?>
            </span>
            <a href="blog/addBlog">Add Blog</a>
            <table class="table">
                <tr>
                <th>sno.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th colspan="2">Operation</th>
                </tr>
                <?php 
                $i=1;
                if(isset($blogdata)):
                foreach($blogdata as $row):?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['TITLE'];?></td>   
                    <td><?php echo $row['DESCRIPTION'];?></td>   
                    <td><?php echo $row['AUTHOR'];?></td>   
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                $i++;
                endforeach;
              endif;  ?>
                
            </table>
	</div>
	
</div>

</body>
</html>