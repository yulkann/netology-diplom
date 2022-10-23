resource "yandex_compute_instance" "mashine" {
  count 		    = 7 
  hostname                  = var.vm[count.index]
  name			    = var.vmname[count.index]

  resources {
    cores  = 4
    memory = 8
  }

  boot_disk {
    initialize_params {
      image_id    = var.ubuntu
      type        = "network-hdd"
      size        = "30"
    }
  }

  network_interface {
    subnet_id  = "${yandex_vpc_subnet.default-subnet[0].id}"
    nat        = true
    ip_address = "192.168.200.10${count.index}"   
  }

  metadata = {
     user-data = "${file("ssh-key")}"
  }
}
