<style>
.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<div class="container">
    <div class="row col-md-5 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
           <!--  <th class="text-center">Action</th> -->
        </tr>
    </thead>
    <?php if($active_candidates){
        foreach ($active_candidates as $key)
            {
    ?>
            <tr>
                <td><?php echo $key->id;?></td>
                <td><?php echo $key->name;?></td>
                <td><?php echo $key->email;?></td>
                <!-- <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td> -->
            </tr>
    <?php } } 
        else{ ?>
            <tr>
                <td colspan="3">No Active Candidates</td>
            </tr>

    <?php   } ?>   
    </table>
    </div>
</div>