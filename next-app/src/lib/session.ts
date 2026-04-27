import { cookies } from "next/headers";
import { getIronSession, IronSessionData, SessionOptions } from "iron-session";

export interface SessionData {
  username?: string;
  loggedAt?: number;
}

declare module "iron-session" {
  interface IronSessionData extends SessionData {}
}

export const sessionOptions: SessionOptions = {
  password:
    process.env.SESSION_PASSWORD ??
    "complex_password_at_least_32_characters_long_for_dev_only",
  cookieName: "curso-saas-session",
  cookieOptions: {
    httpOnly: true,
    sameSite: "lax",
    secure: process.env.NODE_ENV === "production",
    path: "/",
    maxAge: 60 * 60 * 24 * 7, // 7 días
  },
};

export async function getSession() {
  const cookieStore = await cookies();
  return getIronSession<IronSessionData>(cookieStore, sessionOptions);
}

export async function isAuthenticated(): Promise<boolean> {
  const session = await getSession();
  return Boolean(session.username);
}
