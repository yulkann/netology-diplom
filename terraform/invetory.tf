resource "local_file" "inventory" {
  content = <<-DOC
    
    [revproxy]
    yulka.tech ansible_host=${yandex_compute_instance.mashine[0].network_interface.0.nat_ip_address} email=yulknn@gmail.com domain=yulka.tech
    
    [db]
    db01.yulka.tech ansible_host=${yandex_compute_instance.mashine[1].network_interface.0.nat_ip_address}
    db02.yulka.tech ansible_host=${yandex_compute_instance.mashine[2].network_interface.0.nat_ip_address}

    [db01]
    db01.yulka.tech ansible_host=${yandex_compute_instance.mashine[1].network_interface.0.nat_ip_address}

    [db02]
    db02.yulka.tech ansible_host=${yandex_compute_instance.mashine[2].network_interface.0.nat_ip_address}
   
    [wordpress]
    app.yulka.tech ansible_host=${yandex_compute_instance.mashine[3].network_interface.0.nat_ip_address} domain=yulka.tech 

    [gitlab]
    gitlab.yulka.tech ansible_host=${yandex_compute_instance.mashine[4].network_interface.0.nat_ip_address} domain=yulka.tech gitlab_external_url=http://gitlab.yulka.tech/

    [runner]
    runner.yulka.tech ansible_host=${yandex_compute_instance.mashine[5].network_interface.0.nat_ip_address} domain=yulka.tech  

    [monitoring]
    monitoring.yulka.tech ansible_host=${yandex_compute_instance.mashine[6].network_interface.0.nat_ip_address} domain=yulka.tech

    DOC

  filename = "../ansible/inventory.yml"

  depends_on = [
    yandex_compute_instance.mashine[0],
    yandex_compute_instance.mashine[1],
    yandex_compute_instance.mashine[2],
    yandex_compute_instance.mashine[3],
    yandex_compute_instance.mashine[4],
    yandex_compute_instance.mashine[5],
    yandex_compute_instance.mashine[6],
  ]
}
