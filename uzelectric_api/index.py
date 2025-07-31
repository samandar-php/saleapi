import requests
api_key = "<YOUR_API_KEY>"  # Tokenni @SaleAPibot orqali oling

region = 10
sub_region = 10245
account = "0208045"

url = f"https://deapi.uz/ws/uzelectric_api/index.php?region={region}&subRegion={sub_region}&account={account}"
headers = {
    "Authorization": f"Bearer {api_key}"
}
response = requests.get(url, headers=headers)
print(response.text)
