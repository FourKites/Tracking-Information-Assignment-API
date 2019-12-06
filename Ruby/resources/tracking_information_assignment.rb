require 'net/http'
require 'uri'
require 'json'

# Credentials
credentials = {
    'username'      => '',
    'password'      => ''
}

# Information to be assigned
content = {
    'shipper'       => '',  # An internal code to identify the shipper
    'billOfLading'  => '',  # Load/shipment Number
    'tractorNumber' => '',  # Truck plate
    'trailerNumber' => '',  # Trailer plate
}

# Generating the Payload
payload = content.to_json

# Send the request
uri = URI.parse('https://tracking-api.fourkites.com/api/v1/tracking/truck_assignment')
request = Net::HTTP::Post.new(uri)
request.basic_auth(credentials['username'], credentials['password'])
request['Content-Type'] = 'application/json'
request.body = payload
request = Net::HTTP.start(uri.hostname, uri.port, use_ssl: uri.scheme == 'https') do |http|
  http.request(request)
end

# Do whatever you need at this point
response = JSON.parse(request.body)
if request.code != '200'
    # Unsuccessful Response
    puts response
else
    # Successful Response
    puts 'Information successfuly sent!'
end