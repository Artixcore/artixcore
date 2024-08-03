$(document).ready(function() {
    // Ensure DataTables or other scripts are not conflicting
    if ($.fn.dataTable) {
        console.log('DataTables is included');
    }

    // Fetch countries and populate the country dropdown
    $.getJSON('/countries.json', function(countries) {
        const countrySelect = $('#country');
        countries.forEach(country => {
            const option = $('<option></option>').attr('value', country.id).text(country.name);
            countrySelect.append(option);
        });
    });

    // Handle country change event
    $('#country').on('change', function() {
        const countryId = $(this).val();
        if (countryId) {
            $.getJSON('/states.json', function(states) {
                const stateSelect = $('#state');
                stateSelect.empty().append('<option value="">Select State</option>');
                const filteredStates = states.filter(state => state.country_id == countryId);
                filteredStates.forEach(state => {
                    const option = $('<option></option>').attr('value', state.id).text(state.name);
                    stateSelect.append(option);
                });
                stateSelect.prop('disabled', false);
                $('#city').empty().append('<option value="">Select City</option>').prop('disabled', true);
            });
        } else {
            $('#state').empty().append('<option value="">Select State</option>').prop('disabled', true);
            $('#city').empty().append('<option value="">Select City</option>').prop('disabled', true);
        }
    });

    // Handle state change event
    $('#state').on('change', function() {
        const stateId = $(this).val();
        console.log('Selected state ID:', stateId); // Debugging log
        if (stateId) {
            $.getJSON('/cities.json', function(cities) {
                const citySelect = $('#city');
                citySelect.empty().append('<option value="">Select City</option>');
                const filteredCities = cities.filter(city => city.state_id == stateId);
                console.log('Filtered cities:', filteredCities); // Debugging log
                filteredCities.forEach(city => {
                    const option = $('<option></option>').attr('value', city.id).text(city.name);
                    citySelect.append(option);
                });
                citySelect.prop('disabled', false);
            });
        } else {
            $('#city').empty().append('<option value="">Select City</option>').prop('disabled', true);
        }
    });
});
