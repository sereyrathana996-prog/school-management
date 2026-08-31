<div>
    <h1>Login</h1>

    <form wire:submit="login">

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

        <button type="submit">
            Login
        </button>

    </form>

    <br>

    <p>
        Don't have an account?
        <a href="/register" wire:navigate>
            Register
        </a>
    </p>
</div>