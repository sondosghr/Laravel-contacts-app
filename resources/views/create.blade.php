<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" >Name</label>
        <input type="text" class="form-control" id="name" name="name" >
    </div>
    <div class="mb-3">
        <label for="email" >Email</label>
        <input type="email" id="email" name="email" required >
    </div>
    <div class="mb-3">
        <label for="phone" >Phone</label>
        <input type="text" id="phone" name="phone">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select  id="category" name="category">
            <option value="general">General</option>
            <option value="family">Family</option>
            <option value="friends">Friends</option>
            <option value="work">Work</option>
        </select>
    </div>
    <button type="submit">Create Contact</button>
</form>