import json
import requests
from requests.auth import HTTPBasicAuth

# Credentials
credentials = {
    'username'      : '',
    'password'      : ''
}

# Information to be assigned
content = {
    'shipper'       : '',  # An internal code to identify the shipper
    'billOfLading'  : '',  # Load/shipment Number
    'tractorNumber' : '',  # Truck plate
    'trailerNumber' : '',  # Trailer plate
}

# Generating the Payload
payload = json.dumps(content)

# Send the request
request = requests.post(
    'https://tracking-api.fourkites.com/api/v1/tracking/truck_assignment',
    data = payload,
    auth = HTTPBasicAuth(credentials['username'], credentials['password']),
    headers = {'Content-Type': 'application/json'}
)

# Do whatever you need at this point
response = request
if response.status_code != 200:
    # Unsuccessful Response
    print(response.text)
else:
    # Successful Response
    print 'Information successfuly sent!'