# BEE2PAY VCN SDK - Niara
SDK para utilização da API do Bee2Pay VCN, segundo a [Documentação](http://Bee2Pay-api-docs.Bee2Pay.tech/) do release  0.5.3 


## Instanciando a classe
Ao instanciar a classe é necessário informar o TOKEN de acesso

```php
    $sdk = new Bee2Pay\Bee2PaySDK('YOUR_TOKEN'); // Production 
    
    // or
    
    $sdk = new Bee2Pay\Bee2PaySDK('YOUR_TOKEN', false); // Dev
```

## Criando um novo VCN
O método `create()` espera uma instancia de `ReservationRequest` e esta por sua vez se divide em três itens necessarios:
* `Traveller` : Informações do Passageiro (Apenas FirstName e Last Name São Obrigatórios) 
* `Vcn`: Nessa situação é passado apenas o valor e a moeda para utilizar na criação do cartão
* `Service` : Informações sobre a Reserva na Omnibees

Opcionalmente no VCN é possivel escolher o tipo de OUTPUT entre 'DEFAULT' e 'TOKEN'
* `DEFAULT`: Ja retorna as informações do VCN porem não é mais possivel consulta-las posteriormente
* `TOKEN`: Retorna um token no lugar do cartão, o mesmo pode ser usado para consultar os dados do VCN sempre que necessário 

Exemplo:
#####Request
```php
$request = new \Bee2Pay\Requests\ReservationRequest();

//vcn
$vcn = new \Bee2Pay\Entities\Vcn();

$total = new \Bee2Pay\Entities\Price();
$total->setCurrency(\Bee2Pay\Enum\Currency::REAL);
$total->setValue(10.5);

$vcn->setTotal($total);
$vcn->setOutput('TOKEN');
// Traveller
 $traveller = new \Bee2Pay\Entities\Traveller();
 $traveller->setFirstName('Teste');
 $traveller->setLastName('Teste');

// Service
$service = new \Bee2Pay\Entities\Service();
$service->setProductId('HOTEL_EHTL_1054');
$service->setProductName('Teste Teste');
$service->setStartDate('2021-12-10');
$service->setEndDate('2021-12-11');
$service->setPenaltyDate('2021-12-10');
$service->setCityName('São Paulo');
$service->setCountryCode('BR');

$request->setVcn($vcn);
$request->setTraveller($traveller);
$request->setService($service);

$sdk->create($request);
```

##### Response com `$vcn->setOutput('DEFAULT')` ou sem nenhuma opção relacionada a `OUTPUT`
```json
{
    "reservationId": "AAABBB",
    "locator": "",
    "status": " CONFIRMED",
    "refCode": "",
    "creditCard": {
            "cardTypeCode": " MASTERCARD",
            "expireDate": " 0822",
            "cardHolderName": " Teste Teste",
            "cardNumber": " 0000000000002012",
            "cvv": "000"
        },
    "service": {
            "productId": "HOTEL_OMNI_1058",
            "productName": "HOTEL XPTO",
            "startDate": "2021-12-10",
            "endDate": "2021-12-11",
            "penaltyDate": "2021-12-10",
            "cityName": " São Paulo"
        }
}
```

##### Response com `$vcn->setOutput('TOKEN')`
```json
{
    "reservationId": "AAABBB",
    "locator": "",
    "status": " CONFIRMED",
    "refCode": "",
    "creditCard": {
      "token": "assdasd+asdasdasdasd+asdasd/p3Mwxaasdasdasdasdasdasdasdasd"
    },
    "service": {
            "productId": "HOTEL_OMNI_1058",
            "productName": "HOTEL XPTO",
            "startDate": "2021-12-10",
            "endDate": "2021-12-11",
            "penaltyDate": "2021-12-10",
            "cityName": " São Paulo"
        }
}
```

## Consultando Item
O Método `getReservationById()` retorna apenas as informações relacionadas a Reserva
#### Request

```php
    $sdk->getReservationById('AAAAAAB');
```

#### Response
```json
{
  "reservationId": "AAAAAAB",
  "locator": "RES0123456-10",
  "refCode": "12f031-c93480a-ckdsj49102",
  "status": "CONFIRMED",
  "service": {
    "productId": "HOTEL_OMNI_1054",
    "productName": "Blue Tree Premium Morumbi",
    "cityName": "São Paulo",
    "startDate": "2019-05-14",
    "endDate": "2019-05-14",
    "penaltyDate": "2019-05-14"
  }
}
```

## Consultando informações do VCN 
Quando é utilizada a opção de output do vcn como `TOKEN`, é possivel obter os dados do cartão utilizando o token e o numero da Reserva

##### Request
```php
    $sdk->getVcnByToken('AAAAAAB', 'TOKENaAAAAaAAA');
```
##### Response
```json
{
    "creditCard": {
            "cardTypeCode": " MASTERCARD",
            "expireDate": " 0822",
            "cardHolderName": " Teste Teste",
            "cardNumber": " 0000000000002012",
            "cvv": "000"
    }
}
```

## Atualizando dados da Reserva
O processo de atualização consiste em enviar um objeto `ReservationRequest` assim como na criação do VCN, contendo as informações a serem alteradas

```php
$request = new \Bee2Pay\Requests\ReservationRequest();

$traveler = new \Bee2Pay\Entities\Traveller();
$traveler->setDepartment('RH');
$traveler->setFirstName('John');
$traveler->setLastName('Doe');

$request->setTraveller($traveler);

$sdk->updateReservationData('BASBHXS',$request);
```

## Excluindo Item
O método `cancelByReservationId()` exclui as informações relacionadas ao VCN
##### Request
```php
    $sdk->cancelByReservationId('AAAAAAB');
```

##### Response
```json
{
  "reservationId": "AAAAAAB",
  "locator": "RES0123456-10",
  "refCode": "12f031-c93480a-ckdsj49102",
  "status": "CANCELLED",
  "service": {
    "productId": "HOTEL_OMNI_1054",
    "productName": "Blue Tree Premium Morumbi",
    "cityName": "São Paulo",
    "startDate": "2019-05-14",
    "endDate": "2019-05-14",
    "penaltyDate": "2019-05-14"
  }
}
```



![](assets/bee2pay.png)
