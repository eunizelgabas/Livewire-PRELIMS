<div>
    <button type="button" class="btn float-end text-white" style="background-color: #263159" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-plus"></i>
    </button>
    <!-- Add Investor Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <form autocomplete="off" wire:submit.prevent='addInvestor()'>
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Investor Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" wire:model.defer='name'>
                            <label for="name" class="col-form-label">Name:</label>
                            @error('name')
                           <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" wire:model.defer='address'>
                            <label for="address" class="col-form-label">Address:</label>
                            @error('address')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model.defer='email'>
                            <label for="email" class="col-form-label">Email:</label>
                            @error('email')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('phoneno') is-invalid @enderror" wire:model.defer='phoneno'>
                            <label for="phoneno" class="col-form-label">Phone Number:</label>
                            @error('phoneno')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="investment" id="investment" class="form-select @error('investment') is-invalid @enderror" wire:model.defer="investment">
                            <option hidden="true">Select Investment</option>
                            <option selected disabled>Select Investment</option>
                            <option value="Bonds">Bonds</option>
                            <option value="Crypto">Crypto</option>
                            <option value="Property">Property</option>
                            <option value="Commodities">Commodities</option>
                            <option value="Mutual Funds">Mutual Funds</option>
                            <option value="Stocks">Stocks</option>
                            <option value="Cash">Cash</option>
                            </select>
                            <label for="investment">Investment</label>
                            @error('investment')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select name="money" id="money" class="form-select @error('money') is-invalid @enderror" wire:model.defer="money">
                            <option hidden="true">Select Money</option>
                            <option selected disabled>Select Money</option>
                            <option value="Philippine Money">Philippine Money</option>
                            <option value="US Dollar">US Dollar</option>
                            <option value="Bristish Pound">British Pound</option>
                            <option value="Japanese Yen">Japanese Yen</option>
                            </select>
                            <label for="money">Money</label>
                            @error('money')
                            <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Investor</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

