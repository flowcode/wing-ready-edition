<div class="page-header">
    <h1>Todo list</h1>
</div>
<div id="todoList">
    <?php foreach ($viewData["todos"] as $todo): ?>
        <div class="well well-sm">
            <? echo $todo->getDescription() ?>
        </div>
    <?php endforeach; ?>
</div>
<div>
    <button class="btn" data-toggle="modal" href="#myModal" type="button" ><i class="glyphicon glyphicon-plus"></i> Add todo</button>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New to-do</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" >Priority</label>
                        <select class="form-control" name="priority">
                            <option value="high">high</option>
                            <option value="medium">medium</option>
                            <option value="low">low</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->