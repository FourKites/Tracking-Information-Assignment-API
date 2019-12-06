<div align="center">
	<img src="../assets/images/logos/languages/ruby.svg" width="180" alt="Ruby">
</div>

# Ruby Integration
Ruby code for integration with FourKites API.

## Credentials
Please, add your credentials to use the API.

```ruby
# Credentials
credentials = {
    'username'      => '',
    'password'      => ''
}
```

> If you don't have credentials, please, contact FourKites Support Team at `support@fourkites.com`.

---

## Tracking information Assignment
We are able to receive one vehicle information per request.

```ruby
# Location to be sent
content = {
    'shipper'       => '',  # An internal code to identify the shipper
    'billOfLading'  => '',  # Load/shipment number
    'tractorNumber' => '',  # Truck plate
    'trailerNumber' => '',  # Trailer plate
}
```

### Resource
> [resources/tracking_information_assignment.rb](./resources/tracking_information_assignment.rb)

---

## Additional Information
Additional information can be sent. Please, check the [Tracking information Assignment](https://support.fourkites.com/hc/en-us/articles/115007622007-Tracking-Information-Assignment "Request Format") documentation for more details.