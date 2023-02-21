<table class="customer-table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">FORE Name</th>
        <th scope="col">SUR Name</th>
        <th scope="col">BUsiness name</th>
        <th scope="col">Address</th>
        <th scope="col">TOWN</th>
        <th scope="col">POST CODE</th>
        <th scope="col">TYPE</th>
        <th scope="col">Email Address</th>
        <th scope="col">Phone</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $key => $customer)
      <tr id="customer">
        <th id="title" scope="row">{{$customer->title}}</th>
        <td id="fname">{{$customer->first_name}}</td>
        <td id="lname">{{$customer->last_name}}</td>
        <td id="bname">{{$customer->businessname}}</td>
        <td id="address">{{$customer->address}}</td>
        <td id="town">{{$customer->town}}</td>
        <td id="postcode"></td>
        <td id="type">{{$customer->type}}</td>
        <td id="email">{{$customer->email}}</td>
        <td id="phone">{{$customer->contact_no1}}</td>
        <td>
              <a href="{{url('services/'.$customer->client_id . '/' . $customer->id )}}" class="btn btn-orang">
                  Select
              </a>
            
          <a href="{{url('customerDetail/'.$customer->client_id . '/' . $customer->id )}}" class="btn-orang border-less-btn">Details</a>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>