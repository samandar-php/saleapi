import requests

url = "https://deapi.uz/ws/generated_text/index.php"
params = {
    "text": "Salom"
}
headers = {
    "Authorization": "Bearer <YOUR_API_KEY>"  # Tokenni @SaleAPibot orqali oling
}

response = requests.get(url, headers=headers, params=params)

if response.status_code == 200:
    print("✅ Response:", response.json())
else:
    print("❌ Error:", response.status_code)
    print(response.text)
