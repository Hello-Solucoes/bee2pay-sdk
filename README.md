# Bee2Pay VCN SDK - Niara
SDK para utilização da API do Bee2Pay VCN, segundo a [Documentação](http://niara-api-docs.niara.tech/) do release  0.5.3 


## Instanciando a classe
Ao instanciar a classe é necessário informar o TOKEN de acesso

```php
    $sdk = new Bee2Pay\Bee2PaySDK('YOUR_TOKEN'); // Production 
```

Caso deseje utilizar o ambiente de desekvilvimento, basta passar um booleano `false` ao instanciar a Classe

 ```php
    $sdk = new Bee2Pay\Bee2PaySDK('YOUR_TOKEN', false); // Dev
```

## Criando um novo VCN
O método `create()` espera uma instancia de `ReservationRequest` e esta por sua vez se divide em três itens necessarios:
* `Traveller` : Informações do Passageiro (Apenas FirstName e Last Name São Obrigatórios) 
* `Vcn`: Nessa situação é passado apenas o valor e a moeda para utilizar na criação do cartão
* `Service` : Informações sobre a Reserva 

Exemplo:

##### Request

```php
$request = new \Bee2Pay\Requests\ReservationRequest();

// VCN
$request->vcn->setValue(10.5);
$request->vcn->setCurrency('BRL');

// Traveller
$request->traveller->setFirstName('John');
$request->traveller->setLastName('Doe');

//Service
$request->service->setProductId('HOTEL_TEST_1058');
$request->service->setProductName('Hotel Teste Homologação');
$request->service->setStartDate('2021-12-10');
$request->service->setEndDate('2021-12-11');
$request->service->setPenaltyDate('2021-12-10');
$request->service->setCityName('São Paulo');
$request->service->setCountryCode('BR');

$sdk->create($request);
```

##### Response 
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
            "productId": "HOTEL_TEST_1058",
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

##### Request

```php
    $sdk->getReservationById('AAAAAAB');
```

##### Response
```json
{
  "reservationId": "AAAAAAB",
  "locator": "RES0123456-10",
  "refCode": "12f031-c93480a-ckdsj49102",
  "status": "CONFIRMED",
  "service": {
    "productId": "HOTEL_OMNI_1054",
    "productName": "Hotel Teste Homologação",
    "cityName": "São Paulo",
    "startDate": "2019-05-14",
    "endDate": "2019-05-14",
    "penaltyDate": "2019-05-14"
  }
}
```

## Consultando informações do VCN 
É possivel obter os dados do cartão utilizando o `reservationId` retornado ao criar o VCN e o `token` que foi retornado no parametro `creditCard`
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

// Traveller
$request->traveller->setFirstName('John');
$request->traveller->setLastName('Doe');
$request->traveller->setCpf('111.222.333-44');


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
    "productId": "HOTEL_TEST_1054",
    "productName": "Hotel Teste Homologação",
    "cityName": "São Paulo",
    "startDate": "2019-05-14",
    "endDate": "2019-05-14",
    "penaltyDate": "2019-05-14"
  }
}
```


## Criando um VCN para Extras

##### Request
```php
$request = new \Bee2Pay\Entities\Vcn();
$request->setValue(10);
$request->setCurrency('BRL');
$request->setActivationDate('2021-12-12');
$request->setExpirationDate('2021-12-13');
$request->setDescription('Teste de Extras');


$sdk->newExtrasVcn('AAAAA4B',$request);
```

## Excluindo um VCN para Extras

##### Request
```php
$sdk->cancelExtrasVcn('ReservationIDxxxxx', 'VcnIDxxxxxxx');
```


## Consultando informações do VCN de Extras
Utilizando o numero da reserva, o id do Vcn e o token é possivel consultar os dados do cartão

##### Request
```php
$sdk->getExtrasVcn('ReservationIDxxxxx', 'VcnIDxxxxxxx', 'CreditCardTokenxxxxxxxx');
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

![](assets/bee2pay.png)
