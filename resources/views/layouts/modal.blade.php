{{--  Add tags  --}}
<div class="modal fade" id="showtagsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: green !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Assesement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"
                    style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_tag" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description"
                            required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: green !important;">Save<span
                                    class="spinner-border loader1 spinner-border-sm" role="status" aria-hidden="true"
                                    style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit tags  --}}
<div class="modal fade" id="edittagsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: green !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Update Assesement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"
                    style="color:white !important"></button>
            </div>
            <form method="POST" action="{{route('update_assesement')}}" id="tagsSbmt" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="descripId" name="id">
                    <div class="mb-3">
                        <label for="tag_name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="Udescrip_name" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="tag_name" class="form-label">Description</label>
                        <input type="text" name="description" id="Udescrip_description" class="form-control"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="tag_name" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="Udescrip_quantity" class="form-control" required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-tagbtn" style="background-color: green !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
