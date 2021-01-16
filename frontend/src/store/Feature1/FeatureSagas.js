import { takeLatest } from "redux-saga/effects";
import * as TYPES from "./FeatureTypes";


export function* FeatureSaga1() {
  yield takeLatest(TYPES.GET_DATA_REQUEST);
}
