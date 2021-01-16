import React from "react";

export const Home = React.lazy(() => import('../containers/Home/Home'));
export const Login = React.lazy(() => import('../containers/Login/Login'));
export const Register = React.lazy(() => import('../containers/Register/Register'));
export const NotFound = React.lazy(() => import('../components/NotFound/NotFound'));
