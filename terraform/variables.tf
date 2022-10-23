variable "yandex_cloud_id" {
  default = "b1gtufjjda1aacij7115"
}

variable "yandex_folder_id" {
  default = "b1gnivskolanicetj3ba"
}

variable "cidrs" {
  type = list(string)
  default = ["192.168.200.0/24", "192.168.201.0/24"]
}

variable "zones" {
  type = list(string)  
  default = ["ru-central1-a", "ru-central1-b"]
}

variable "ubuntu" {
  default = "fd8kdq6d0p8sij7h5qe3"
}

variable "vm" {
  type = list(string)
  default = ["yulka.tech", "db01.yulka.tech", "db02.yulka.tech", "app.yulka.tech", "gitlab.yulka.tech", "runner.yulka.tech", "monitoring.yulka.tech"]
}

variable "vmname" {
  type = list(string)
  default = ["yulka", "db01", "db02", "app", "gitlab", "runner", "monitoring"]
}
