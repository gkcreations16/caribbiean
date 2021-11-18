@extends('layouts.frontend.partials.appp2')
@section('content')
    <!------------------------header-end------------------------>
    @if (isset($serch_input))
        @include('listingPartials/searchlisting')
    @elseif(isset($categorybase))

        @include('listingPartials/categorybaselisting')
        <!---------------------------listing-end----------------------------->
    @else
        @include('listingPartials/listing')
    @endif
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.category').on('change', function() {
                let id = $(this).val();
                $('.subcategory').empty();
                $('.subcategory').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'GetAdvanceSerchData/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('.subcategory').empty();
                        $('.subcategory').append(
                            `<option value="0" disabled selected>Select </option>`
                        );
                        response.forEach(element => {
                            $('.subcategory').append(
                                `<option value="${element['id']}">${element['name']}</option>`
                            );
                            alert('hello');
                        });
                    }
                });
            });
        });
    </script>
@endsection
