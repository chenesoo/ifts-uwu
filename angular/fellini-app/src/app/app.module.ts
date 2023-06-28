import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { FilmListComponent } from './film-list/film-list.component';
import { FilmComponent } from './film/film.component';
import { HttpClientModule } from '@angular/common/http';


const routes: Routes = [
  { path: '', component: FilmListComponent },
  { path: 'film', component: FilmListComponent },
  { path: 'film/:id', component: FilmComponent },
  // otherwise redirect to home
  { path: '**', redirectTo: '' },
];

@NgModule({
  declarations: [AppComponent, FilmListComponent, FilmComponent],
  imports: [BrowserModule, HttpClientModule, RouterModule.forRoot(routes)],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule { }
