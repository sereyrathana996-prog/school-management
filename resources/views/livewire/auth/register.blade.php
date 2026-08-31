<div>
    <h1>Register</h1>

    <form wire:submit="register">

        <div>
            <label>Name</label>

            <input
                type="text"
                wire:model="name"
            >

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <label>Email</label>

            <input
                type="email"
                wire:model="email"
            >

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <label>Password</label>

            <input
                type="password"
                wire:model="password"
            >

            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <label>Confirm Password</label>

            <input
                type="password"
                wire:model="password_confirmation"
            >
        </div>

        <br>

        <button type="submit">
            Register
        </button>

    </form>
</div>