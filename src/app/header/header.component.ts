import {Component, HostListener, OnInit} from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.sass']
})
export class HeaderComponent implements OnInit {
  public path: any;
  public activeClassHeaderProfileMenu: boolean = false;

  constructor() {
  }

  ngOnInit(): void {
  }

  handleClickOnSideMenuHeader(event: Event) {
    this.activeClassHeaderProfileMenu = !this.activeClassHeaderProfileMenu;//
  }


}
