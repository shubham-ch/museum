import axios from "axios";

export const app_dict = {
    "access": null,
    "refresh": null
}

export async function fetchWithToken(
    resource,
    options
) {
    const { timeout = 120000 } = options;
    const controller = new AbortController();
    const timeoutID = setTimeout(() => controller.abort(), timeout);
    options.headers?.append("Authorization", `Bearer ${app_dict["access"]}`);
    options.headers?.append("Accept", "application/json");
    options.headers?.append("Content-Type", "application/json")
    const response = await fetch(resource, {
        ...options,
        signal: controller.signal,
    })
    .then(response => response.json())
    .catch(error=>{
        console.log(error)
    })    
    clearTimeout(timeoutID);
    return response;
}
export default fetchWithToken;