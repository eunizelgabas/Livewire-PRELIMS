<div class="container">
    <div class="row">
        <div class="col">
            <select class="form-select" wire:model.lazy='investment'>
                <option value="all">All</option>
                <option value="Bonds">Bonds</option>
                <option value="Crypto">Crypto</option>
                <option value="Property">Property</option>
                <option value="Commodities">Commodities</option>
                <option value="Mutual Funds">Mutual Funds</option>
                <option value="Stocks">Stocks</option>
                <option value="Cash">Cash</option>
            </select>
        </div>
        <div class="col">
            <select class="form-select" wire:model.lazy='money'>
                <option value="all">All</option>
                <option value="Philippine Money">Philippine Money</option>
                    <option value="US Dollar">US Dollar</option>
                    <option value="Bristish Pound">British Pound</option>
                    <option value="Japanese Yen">Japanese Yen</option>
            </select>
        </div>
        <div class="col">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" wire:model='search'>
              </form>
        </div>
        <div class="col">
            {{$investors->links()}}
        </div>
    </div>

    <div class="row">
        @foreach($investors as $investor)

        <div class="col-sm-4 mt-5">

            <div class="card border-secondary mb-3">
                <div class="card-header" style="background-color:#FFFBEB">
                    Investor Details
                </div>
                <div class="card-body">
                    <h5 class="card-title">Name: {{$investor->name}}</h5>
                    <p class="card-text">Address: {{$investor->address}}</p>
                    <p class="card-text">Email: {{$investor->email}}</p>
                    <p class="card-text">Phone Number: {{$investor->phoneno}}</p>
                    <p class="card-text">Investment: {{$investor->investment}}</p>
                    <p class="card-text">Money: {{$investor->money}}</p>

                    <hr>
                    <a href="{{url('edit',['investor'=> $investor->id])}}" class="btn btn-warning btn-sm float-end m-2">
                        <i class="fa-solid fa-user-pen"></i>
                    </a>
                    <button type="button" class="btn btn-danger btn-sm float-end m-2 " data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click='deleteConfirmation({{$investor->id}})'>
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <!-- Delete Investor Modal -->
                    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Investor</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4>Are you sure you want to delete this investor?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" wire:click ="deleteInvestorData()" >Delete Investor</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        @endforeach
    </div>

</div>

