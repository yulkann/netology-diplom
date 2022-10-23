terraform {
  required_providers {
    yandex = {
      source = "yandex-cloud/yandex"
    }
  }
  required_version =  ">= 0.13"


  backend "s3" {
    endpoint = "storage.yandexcloud.net"
    bucket   = "netback"
    region   = "ru-central1"
    key      = "terraform.tfstate.d/stage/terraform.tfstate"
    shared_credentials_file = "~/.aws/credentials"
    #profile                 = "yulka-netology"
    skip_region_validation      = true
    skip_credentials_validation = true
  }
}
provider yandex {
  service_account_key_file = "../../../secrets/key.json"
  cloud_id                 = var.yandex_cloud_id
  folder_id                = var.yandex_folder_id
  zone                     = "ru-central1-a"
}
