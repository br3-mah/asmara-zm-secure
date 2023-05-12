<div wire:ignore.self class="modal fade" id="inquiryDetailModalLong">
    <div class="modal-dialog">
        <div class="modal-content mx-auto p-4 flex justify-center" wire:loading>
            <img src="{{ asset('public/dash/images/loader.gif') }}" />
        </div>
        <div class="modal-content" wire:loading.remove>
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">SUBJECT: {{ $contact_info !== null ?  $contact_info->subject : ''}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                {{ $contact_info !== null ? $contact_info->message : ''  }}
                <br/>
                <br/>
                {{ $contact_info !== null ?  $contact_info->phone : '' }}
                <br>
                {{ $contact_info !== null ?  $contact_info->email : '' }}
                <p class="text-primary">{{ $contact_info !== null ?  $contact_info->created_at->diffForHumans() : '' }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>