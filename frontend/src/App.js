import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link,
  useHistory
} from "react-router-dom";
import React, { useState, useRef } from 'react';
import { createGlobalState } from 'react-hooks-global-state';
import axios from 'axios';

import logo from './logo.svg';
import './App.css';

const initialState = {
    loading: false,
    apiKey: null,
    usersLoaded: false
};

const { useGlobalState } = createGlobalState(initialState);

function App() {

const [loading, setLoading] = useGlobalState('loading');
    
  return (
    <Router>
    <div className="App">
         <Switch>
          <Route path="/login">
            <Login />
          </Route>
          <Route path="/register">
            <Register />
          </Route>
          <Route path="/">
            <UsersTable />
          </Route>
        </Switch>
    </div>
    {loading? (<div class="loading">Loading...</div>) : (<span></span>)}
    </Router>
  );
}

function Login()
{   
    let history = useHistory();
    const username = useRef(null);
    const password = useRef(null);
    const [loading, setLoading] = useGlobalState('loading'); 
    const [apiKey, setApiKey] = useGlobalState('apiKey');

    const login = function()
    {
        setLoading(true);
        axios.post('http://api.mmf.atvardovsky.tk/authentication_token',{
            'username': username.current.value,
            'password': password.current.value
        }, {
        headers: {
            'Content-Type': 'application/json',
        }
    }).then(function(response){
        setLoading(false);
        setApiKey(response.data.token);
        history.push('/');
    }).catch(function (error){
        setLoading(false);
            alert('error. pls. see console.log');
            console.log(error);
        });

    }

    return <form>
        <div>
            <div>
                <div class="leftField">Login:</div>
                <input type="text" ref={username}/>
            </div>
            <div>
                <div class="leftField">Password:</div>
                <input type="password" ref={password}/>
            </div>
            <button  type="button" onClick={login}>Login</button>

        </div>
         <Link to="/register">Register</Link>
    </form>
}

function Register()
{
    let history = useHistory();
    const [loading, setLoading] = useGlobalState('loading');
    const username = useRef(null);
    const password = useRef(null);

    const register = function()
    {
        setLoading(true);
        axios.post('http://api.mmf.atvardovsky.tk/users',{
            'username': username.current.value,
            'password': password.current.value
        }, {
        headers: {
            'Content-Type': 'application/json',
        }}).then(function(){
            setLoading(false);
            history.push('/login');
        }).catch(function (error){
            setLoading(false);
            alert('error. pls. see console.log');
            console.log(error);
        });

    }
        return <form>
        <div>
            <div>
                <div class="leftField">Login:</div>
                <input ref={username} type="text" />
            </div>
            <div>
                <div class="leftField">Password:</div>
                <input ref={password} type="password" />
            </div>
            <button type="button" onClick={register}>Register</button>

        </div>
         <Link to="/login">Login</Link>
    </form>
}

let apiKey = null;

function UsersTable()
{
    const [loading, setLoading] = useGlobalState('loading');
    const [apiKey, setApiKey] = useGlobalState('apiKey'); 
    const [usersLoaded,setUsersLoaded] = useGlobalState('usersLoaded'); 
    const [users, setUsers] = useState([]);


    let history = useHistory();
    if(!apiKey)
    {
        history.push('/login');
        return <span></span>;
    }

    const loadUsers = function(){
        setLoading(true);
        axios.get('http://api.mmf.atvardovsky.tk/users', {        
        data: {},
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + apiKey
        }}).then(function(response){
            setUsers(response.data);
            setLoading(false);
        }).catch(function (error){
            setLoading(false);
            alert('error. pls. see console.log');
            console.log(error);
        });
    }
    if(!usersLoaded)
    {
       
        loadUsers();
        setUsersLoaded(true);
    }
    return <div>
    <button onClick={function(){loadUsers()}}>Refresh</button>
    <ul>
    {users.map((user) =>
        <li key={user.id}>
          {user.username}
        </li>
      )}
    </ul></div>
}

export default App;
