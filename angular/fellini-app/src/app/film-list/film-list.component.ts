import { Component } from '@angular/core';
import { FilmService } from '../film.service';
import { Film } from '../film.model';

@Component({
  selector: 'app-film-list',
  templateUrl: './film-list.component.html',
  styleUrls: ['./film-list.component.css'],
})
export class FilmListComponent {
  filmList: Film[] = [];

  constructor(public filmService: FilmService) {}

  ngOnInit(): void {
    this.filmService.getFilmList().then((list) => {
      this.filmList = list;
    });
  }
}
