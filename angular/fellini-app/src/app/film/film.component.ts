import { Component, Input } from '@angular/core';
import { Film } from '../film.model';
import { FilmService } from '../film.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-film',
  templateUrl: './film.component.html',
  styleUrls: ['./film.component.css'],
})
export class FilmComponent {
  @Input() film: Film | null = null;
  @Input() dettaglio: boolean = false;
  errorMessage: string | null = null;

  constructor(
    public filmService: FilmService,
    private activatedRoute: ActivatedRoute
  ) {}
  ngOnInit(): void {
    if (this.film == null) {
      const id = this.activatedRoute.snapshot.paramMap.get('id');
      console.log('FilmComponent.ngOnInit(): film id=', id);
      this.filmService
        .getFilmById(Number(id))
        .then((x) => {
          this.film = x;
        })
        .catch((err) => {
          this.errorMessage = err;
        });
      this.dettaglio = true;
    }
  }
}
