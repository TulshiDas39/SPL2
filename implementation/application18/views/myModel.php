<button  type="button" id="choice" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display: none"></button>

<div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>This is a small modal.</p>
            </div>
            <div class="modal-footer">

                <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Closes</button>
                <button type="button" id="confirm" onclick="send_submittedfile()" class="btn btn-primary" data-dismiss="modal">confirm</button>
            </div>
        </div>
    </div>
</div>
