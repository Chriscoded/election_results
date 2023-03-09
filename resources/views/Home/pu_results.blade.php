@extends('layouts.app')

@section('content')


        <table class="table">

            <thead>
                <tr>
                    <th>
                    polling_unit_name
                    </th>
                    <th>
                    polling_unit_number
                    </th>
                    <th>
                    polling_unit_description
                    </th>
                    <th>
                    lat
                    </th>

                    <th>
                    long
                    </th>
                    <th>
                    ward_name
                    </th>
                    <th>
                    ward_description
                    </th>
                    <th>
                    entered_by_user
                    </th>
                    <th>
                    date_entered
                    </th>
                    <th>
                    party_abbreviation
                    </th>
                    <th>
                    party_score
                    </th>


                    <th></th>
                </tr>
            </thead>
            <tbody>

        @foreach ($results as $result)
                <tr>
                    <td>
                        {{ $result->polling_unit_name }}
                    </td>
                    <td>
                        {{ $result->polling_unit_number }}
                    </td>
                    <td>
                        {{ $result-> polling_unit_description }}
                    </td>
                    <td>
                        {{ $result->lat }}
                    </td>
                    <td>
                        {{ $result->long }}
                    </td>
                    <td>
                        {{ $result->ward->ward_name }}
                    </td>
                    <td>
                        {{ $result->ward->ward_description }}

                    </td>
                    <td>
                        {{ $result->ward->polling_units->entered_by_user }}
                    </td>
                    <td>
                        {{ $result->date_entered}}
                    </td>
                    <td>
                        {{ $result->party_abbreviation }}
                    </td>
                    <td>
                        {{ $result->party_score }}
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>

        <div class="text-center">{{ $results->links() }}</div>

    </div>

<script>

</script>

 @endsection
