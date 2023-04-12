<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="card-action coin-tabs mb-2">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#AllGuest">All Contact Inquiries</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Pending">Pending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Booked">Booked</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Canceled">Canceled</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Refund">Refund</a>
                    </li> --}}
                </ul>
            </div>
            <div class="d-flex align-items-center mb-2 flex-wrap"> 
                {{-- <div class="guest-calendar">
                    <div id="reportrange" class="pull-right reportrange" style="width: 100%">
                        <span></span><b class="caret"></b>
                        <i class="fas fa-chevron-down ms-3"></i>
                    </div>
                </div>
                <div class="newest ms-3">
                    <select class="default-select">
                        <option>Newest</option>
                        <option>Oldest</option>
                    </select>
                </div>	 --}}
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="tab-content">	
                            <div class="tab-pane active show" id="AllGuest">
                                <div class="table-responsive">
                                    <table class="table card-table display mb-4 shadow-hover default-table table-responsive-lg" id="guestTable-all">
                                        <thead>
                                            <tr>
                                                <th class="bg-none">
                                                    <div class="form-check style-1">
                                                      <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                    </div>
                                                </th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Sent On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($inquiries as $inq)
                                            {{-- @dd($inq->created_at->toFormattedDateString()) --}}
                                                <tr>
                                                    <td>
                                                        <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="concierge-bx d-flex align-items-center">
                                                            <div>
                                                                <h5 class="fs-16 mb-0 text-nowrap">
                                                                    <a class="text-black" href="javascript:void(0);">
                                                                        {{ $inq->subject }}
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <span style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#inquiryDetailModalLong" wire:click="viewMessageDetails({{$inq->id}})">{{ $inq->message }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $inq->email }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $inq->phone }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $inq->created_at->toFormattedDateString() }}</span>
                                                    </td>
                                                </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>	
                            </div>	
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    @if($contact_info != null)
        @include('livewire.dashboard.admin.__partials.contacts.__inquiry_details')
    @endif
</div>
