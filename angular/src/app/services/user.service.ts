import { Injectable } from '@angular/core';
import {Http, Response, Headers} from "@angular/http";
import "rxjs/add/operator/map";
import {Observable} from 'rxjs/Observable';
import {GLOBAL} from "./global";

@Injectable()
export class UserService {
    public url: string;
    public identity;
    public token;

    constructor(private _http: Http) {
        this.url = GLOBAL.url;
    }

    signUp(userToLogin) {
        let json = JSON.stringify(userToLogin);
        let params = "json=" + json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});

        return this
            ._http.post(this.url + '/login', params, {headers: headers})
            .map(res => res.json());
    }

    getIdentity() {
        let identity = JSON.parse(localStorage.getItem('identity'));

        if (identity != "undefined") {
            this.identity = identity;
        }
        else {
            this.identity = null;
        }

        return this.identity;
    }

    getToken() {
        let token = JSON.parse(localStorage.getItem('token'));

        if (token != "undefined") {
            this.token = token;
        }
        else {
            this.token = null;
        }

        return this.token;
    }

    register(userToRegister) {
        let json = JSON.stringify(userToRegister);
        let params = "json=" + json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});

        return this
            ._http.post(this.url+'/user/new', params, {headers: headers})
            .map(res => res.json());
    }

    updateUser(userToUpdate) {
        let json = JSON.stringify(userToUpdate);
        let params = "json=" + json + '&authorization=' + this.getToken();  //le pasamos también el token
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});

        return this
            ._http.post(this.url+'/user/edit', params, {headers: headers})
            .map(res => res.json());
    }
}
