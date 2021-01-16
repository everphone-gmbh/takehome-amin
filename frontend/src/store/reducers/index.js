import { combineReducers } from "redux";
import lang from "../Lang/LangReducer";
import loader from "../Loader/LoaderReducer";
import Feature1 from "../Feature1/FeatureReducer";

export default combineReducers({
  lang,
  loader,
  Feature1
});
