<p>You have to fill out some more data to complete the registration</p>

<form method="POST" action=" {{URL::to('/admin/truckFormValidation')}}">
    <div class="form-group">
    <label>Food truck name</label>
        <input type="text" name="name" class="form-control" placeholder="Food truck name">
    </div>

    <div class="form-group">
    <label>Food truck name</label>
        <input type="text" name="description" class="form-control" placeholder="Describe your truck">
    </div>

    <div class="form-group">
    <label>country</label>
        <input type="text" name="country" class="form-control" placeholder="country">
    </div>

    <div class="form-group">
    <label>city</label>
        <input type="text" name="city" class="form-control" placeholder="city">
    </div>

    <div class="form-group">
    <label>adress</label>
        <input type="text" name="address" class="form-control" placeholder="adress">
    </div>

    <div class="form-group">
    <label>web page</label>
        <input type="text" name="website" class="form-control" placeholder="web page">
    </div>

    <div class="form-group">
    <label>Phone number</label>
        <input type="number" name="phone" class="form-control" placeholder="phone number">
    </div>

    <div class="form-group">
    <label>opening hours</label>
        <input type="text" name="open" class="form-control" placeholder="opening hours">
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="submit" value="save" class="btn btn-primary">
<form>
