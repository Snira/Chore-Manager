<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Chore</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this chore?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="{{ route('chore.destroy', compact('chore')) }}">
                    Confirm
                </a>
            </div>
        </div>
    </div>
</div>


