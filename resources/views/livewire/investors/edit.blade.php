<div>
    <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-header text-center text-white" style="background-color:#263159">
                <h2>Update Investor Form</h2>
            </div>
            <div class="card-body" style="background-color:#FFFBEB">
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
                <div class="from-group">
                    <button class="btn btn-primary float-end m-2" wire:click="editInvestor">Edit Student</button>
                    <button class="btn btn-secondary float-end m-2" wire:click="cancel">Cancel</button>
                </div>

            </div>
        </div>
    </div>
</div>
