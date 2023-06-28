import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Film } from './film.model';

@Injectable({
  providedIn: 'root',
})
export class FilmService {
  filmList: Film[] = [];

  constructor(private http: HttpClient) {
    const film1: Film = {
      id: 1,
      name: 'Amarcord',
      year: 1973,
      description:
        "Una serie di aneddoti comici e nostalgici ambientati in una cittadina costiera dell'Italia degli anni '30.",
      imageUrl:
        'https://m.media-amazon.com/images/M/MV5BY2ExNTRmMDktYjU4My00ODdkLWFiMTctYmYyZTMwMWY3ZjkwXkEyXkFqcGdeQXVyNDE5MTU2MDE@._V1_FMjpg_UY2940_.jpg',
      director: 'Federico Fellini',
      cast: ['Magali Noel', 'Bruno Zanin'],
    };

    const film2: Film = {
      id: 2,
      name: '8 1/2',
      year: 1963,
      description:
        'Un regista cinematografico tormentato si ritira tra i suoi ricordi e le sue fantasie.',
      imageUrl:
        'https://m.media-amazon.com/images/M/MV5BM2E1ODVhN2YtYjAyYy00YWQzLTg4YjQtMjUwYzE4MDMyMWRhXkEyXkFqcGdeQXVyMTA2ODMzMDU@._V1_FMjpg_UX1024_.jpg',
      director: 'Federico Fellini',
      cast: ['Marcello Mastroianni', 'Claudia Cardinale'],
    };

    this.filmList.push(film1);
    this.filmList.push(film2);
  }

  getFilmList(): Promise<Film[]> {
    return Promise.resolve(this.filmList);
  }

  getFilmById(id: number): Promise<Film> {
    const film = this.filmList.find((f) => f.id === id);
    if (film != null) {
      return Promise.resolve(film);
    } else {
      return Promise.reject('Film Not found: id=' + id);
    }
  }
}
